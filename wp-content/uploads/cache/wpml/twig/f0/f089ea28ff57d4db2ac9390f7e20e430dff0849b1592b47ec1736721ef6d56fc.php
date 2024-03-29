<?php

namespace WPML\Core;

use \WPML\Core\Twig\Environment;
use \WPML\Core\Twig\Error\LoaderError;
use \WPML\Core\Twig\Error\RuntimeError;
use \WPML\Core\Twig\Markup;
use \WPML\Core\Twig\Sandbox\SecurityError;
use \WPML\Core\Twig\Sandbox\SecurityNotAllowedTagError;
use \WPML\Core\Twig\Sandbox\SecurityNotAllowedFilterError;
use \WPML\Core\Twig\Sandbox\SecurityNotAllowedFunctionError;
use \WPML\Core\Twig\Source;
use \WPML\Core\Twig\Template;

/* exchange-rates.twig */
class __TwigTemplate_dfe169dfbdf37d0cd1e9bd870b661076bdd2a9470c35d3d9ccfcae550841f2c4 extends \WPML\Core\Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<div class=\"wcml-section\" id=\"online-exchange-rates\" ";
        if (twig_test_empty(($context["multi_currency_on"] ?? null))) {
            echo "style=\"display:none\"";
        }
        echo ">

    <div class=\"wcml-section-header\">
        <h3>";
        // line 4
        echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["exchange_rates"] ?? null), "strings", []), "header", []), "html", null, true);
        echo "</h3>
    </div>

    <div class=\"wcml-section-content\" id=\"online-exchange-rates-no-currencies\" ";
        // line 7
        if ($this->getAttribute(($context["exchange_rates"] ?? null), "secondary_currencies", [])) {
            echo " style=\"display:none\"";
        }
        echo ">
        <p><i>";
        // line 8
        echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["exchange_rates"] ?? null), "strings", []), "no_currencies", []), "html", null, true);
        echo "</i></p>
    </div>
    <div class=\"wcml-section-content\" ";
        // line 10
        if (twig_test_empty($this->getAttribute(($context["exchange_rates"] ?? null), "secondary_currencies", []))) {
            echo " style=\"display:none\"";
        }
        echo ">
        <p>
            <input type=\"checkbox\" id=\"exchange-rates-automatic\" name=\"exchange-rates-automatic\" value=\"1\"
                   ";
        // line 13
        if (($this->getAttribute($this->getAttribute(($context["exchange_rates"] ?? null), "settings", []), "automatic", []) == 1)) {
            echo "checked=\"checked\"";
        }
        echo " />
            <label for=\"exchange-rates-automatic\">";
        // line 14
        echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["exchange_rates"] ?? null), "strings", []), "enable_automatic", []), "html", null, true);
        echo "</label>
        </p>

        <div id=\"exchange-rates-online-wrap\"
             class=\"exchange-rates-online-wrap\"";
        // line 18
        if (($this->getAttribute($this->getAttribute(($context["exchange_rates"] ?? null), "settings", []), "automatic", []) == 0)) {
            echo " style=\"display: none;\"";
        }
        echo " >

        <div class=\"wcml-section-content-inner\">
            <p id=\"update-rates-time\">";
        // line 21
        echo $this->getAttribute($this->getAttribute(($context["exchange_rates"] ?? null), "strings", []), "updated_time", []);
        echo "</p>

            <p>
                <input type=\"button\" id=\"update-rates-manually\" class=\"button-secondary\"
                       value=\"";
        // line 25
        echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["exchange_rates"] ?? null), "strings", []), "update", []), "html", null, true);
        echo "\" />
                <i class=\"otgs-ico-help wcml-tip\" data-tip=\"";
        // line 26
        echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["exchange_rates"] ?? null), "strings", []), "update_tip", []), "html", null, true);
        echo "\" style=\"display: none\"></i>
                <span id=\"update-rates-spinner\" class=\"spinner\" style=\"float:none;\"></span>
                <input type=\"hidden\" id=\"update-exchange-rates-nonce\" value=\"";
        // line 28
        echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["exchange_rates"] ?? null), "strings", []), "nonce", []), "html", null, true);
        echo "\"/>
            </p>

            <p class=\"notice inline notice-success\" id=\"exchange-rates-success\"
               style=\"display:none\">";
        // line 32
        echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["exchange_rates"] ?? null), "strings", []), "updated_success", []), "html", null, true);
        echo "</p>
            <p class=\"notice inline notice-error\" id=\"exchange-rates-error\" style=\"display:none\"></p>
        </div>

        <div class=\"wcml-section-content-inner\">
            <h4>";
        // line 37
        echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["exchange_rates"] ?? null), "strings", []), "services_label", []), "html", null, true);
        echo "</h4>
            <ul class=\"exchange-rates-sources\">

                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exchange_rates"] ?? null), "services", []));
        foreach ($context['_seq'] as $context["id"] => $context["service"]) {
            // line 41
            echo "                    <li>
                        <input type=\"radio\" id=\"service-";
            // line 42
            echo \WPML\Core\twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\" name=\"exchange-rates-service\" value=\"";
            echo \WPML\Core\twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\"
                               ";
            // line 43
            if (($this->getAttribute($this->getAttribute(($context["exchange_rates"] ?? null), "settings", []), "service", []) == $context["id"])) {
                echo "checked=\"checked\"";
            }
            echo " />
                        <label for=\"service-";
            // line 44
            echo \WPML\Core\twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\">
                            ";
            // line 45
            echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($context["service"], "name", []), "html", null, true);
            echo "
                        </label>
                        <a href=\"";
            // line 47
            echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($context["service"], "url", []), "html", null, true);
            echo "\" title=\"";
            echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["exchange_rates"] ?? null), "strings", []), "visit_website", []), "html", null, true);
            echo "\" class=\"exchange-rate-service-website no-ico\" target=\"_blank\">
                            <span class=\"dashicons dashicons-external\"></span>
                        </a>
                        <div class=\"service-details-wrap\" ";
            // line 50
            if (($this->getAttribute($this->getAttribute(($context["exchange_rates"] ?? null), "settings", []), "service", []) != $context["id"])) {
                echo " style=\"display: none;\"";
            }
            echo " >

                            ";
            // line 52
            if ($this->getAttribute($context["service"], "requires_key", [])) {
                // line 53
                echo "                                ";
                echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["exchange_rates"] ?? null), "strings", []), "key_required", []), "html", null, true);
                echo "
                                <input type=\"text\" name=\"services[";
                // line 54
                echo \WPML\Core\twig_escape_filter($this->env, $context["id"], "html", null, true);
                echo "][api-key]\"
                                       value=\"";
                // line 55
                echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($context["service"], "api_key", []), "html", null, true);
                echo "\"
                                       placeholder=\"";
                // line 56
                echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["exchange_rates"] ?? null), "strings", []), "key_placeholder", []), "html", null, true);
                echo "\"
                                       size=\"40\" />
                            ";
            }
            // line 59
            echo "
                            <p class=\"notice inline notice-error\" ";
            // line 60
            if (("fixerio" != $context["id"])) {
                echo "style=\"display:none\"";
            }
            echo ">
                                ";
            // line 61
            echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["exchange_rates"] ?? null), "strings", []), "fixerio_warning", []), "html", null, true);
            echo "
                            </p>
                            <p class=\"notice inline notice-error\" id=\"service-error-";
            // line 63
            echo \WPML\Core\twig_escape_filter($this->env, $context["id"], "html", null, true);
            echo "\" ";
            if (($this->getAttribute($context["service"], "last_error", []) == false)) {
                echo "style=\"display:none\"";
            }
            echo ">
                            ";
            // line 64
            if ($this->getAttribute($context["service"], "last_error", [])) {
                // line 65
                echo "                                ";
                echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["service"], "last_error", []), "text", []), "html", null, true);
                echo " <i>(";
                echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["service"], "last_error", []), "time", []), "html", null, true);
                echo ")</i>
                            ";
            }
            // line 67
            echo "                            </p>

                        </div>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['id'], $context['service'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "            </ul>
        </div>

        <div class=\"wcml-section-content-inner\">
            <h4>";
        // line 76
        echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["exchange_rates"] ?? null), "strings", []), "lifting_label", []), "html", null, true);
        echo "</h4>
            <p>";
        // line 77
        echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["exchange_rates"] ?? null), "strings", []), "lifting_details1", []), "html", null, true);
        echo "</p>
            <input type=\"number\" name=\"lifting_charge\" value=\"";
        // line 78
        echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute(($context["settings"] ?? null), "lifting_charge", []), "html", null, true);
        echo "\" step=\"any\" style=\"width:64px\" /> %
            <p><i>";
        // line 79
        echo \WPML\Core\twig_escape_filter($this->env, sprintf($this->getAttribute($this->getAttribute(($context["exchange_rates"] ?? null), "strings", []), "lifting_details2", []), $this->getAttribute($this->getAttribute($this->getAttribute(($context["exchange_rates"] ?? null), "services", []), $this->getAttribute($this->getAttribute(($context["exchange_rates"] ?? null), "settings", []), "service", []), [], "array"), "name", [])), "html", null, true);
        echo "</i></p>
        </div>

        <div class=\"wcml-section-content-inner\">

            <h4>";
        // line 84
        echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["exchange_rates"] ?? null), "strings", []), "frequency", []), "html", null, true);
        echo "</h4>

            <ul>
                <li>
                    <input type=\"radio\" id=\"update-frequency-daily\" name=\"update-schedule\" value=\"daily\"
                           ";
        // line 89
        if (($this->getAttribute($this->getAttribute(($context["exchange_rates"] ?? null), "settings", []), "schedule", []) == "daily")) {
            echo "checked=\"checked\"";
        }
        echo "/>
                    <label for=\"update-frequency-daily\">";
        // line 90
        echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["exchange_rates"] ?? null), "strings", []), "daily", []), "html", null, true);
        echo "</label>
                </li>

                <li>
                    <input type=\"radio\" id=\"update-frequency-weekly\" name=\"update-schedule\" value=\"weekly\"
                           ";
        // line 95
        if (($this->getAttribute($this->getAttribute(($context["exchange_rates"] ?? null), "settings", []), "schedule", []) == "weekly")) {
            echo "checked=\"checked\"";
        }
        echo " />
                    <label for=\"update-frequency-weekly\">";
        // line 96
        echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["exchange_rates"] ?? null), "strings", []), "weekly", []), "html", null, true);
        echo "</label>
                    <select name=\"update-weekly-day\"
                            ";
        // line 98
        if (($this->getAttribute($this->getAttribute(($context["exchange_rates"] ?? null), "settings", []), "schedule", []) != "weekly")) {
            echo "disabled";
        }
        echo ">
                        ";
        // line 99
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(0, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 100
            echo "                            <option value=\"";
            echo \WPML\Core\twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\"";
            if (($this->getAttribute($this->getAttribute(($context["exchange_rates"] ?? null), "settings", []), "week_day", []) == $context["i"])) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo \WPML\Core\twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('get_weekday')->getCallable(), [$context["i"]]), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "                    </select>
                </li>

                <li>
                    <input type=\"radio\" id=\"update-frequency-monthly\" name=\"update-schedule\" value=\"monthly\"
                           ";
        // line 107
        if (($this->getAttribute($this->getAttribute(($context["exchange_rates"] ?? null), "settings", []), "schedule", []) == "monthly")) {
            echo "checked=\"checked\"";
        }
        echo " />
                    <label for=\"update-frequency-monthly\">";
        // line 108
        echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["exchange_rates"] ?? null), "strings", []), "monthly", []), "html", null, true);
        echo "</label>
                    <select name=\"update-monthly-day\"
                            ";
        // line 110
        if (($this->getAttribute($this->getAttribute(($context["exchange_rates"] ?? null), "settings", []), "schedule", []) != "monthly")) {
            echo "disabled";
        }
        echo ">
                        ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 112
            echo "                            <option value=\"";
            echo \WPML\Core\twig_escape_filter($this->env, $context["i"], "html", null, true);
            echo "\"";
            if (($this->getAttribute($this->getAttribute(($context["exchange_rates"] ?? null), "settings", []), "month_day", []) == $context["i"])) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo \WPML\Core\twig_escape_filter($this->env, $context["i"], "html", null, true);
            if (($context["i"] == 1)) {
                echo "st";
            } elseif (($context["i"] == 2)) {
                echo "nd";
            } elseif (($context["i"] == 2)) {
                echo "rd";
            } else {
                echo "th";
            }
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "                    </select>
                </li>

                <li>
                    <input type=\"radio\" id=\"update-frequency-manual\" name=\"update-schedule\" value=\"manual\"
                           ";
        // line 119
        if (($this->getAttribute($this->getAttribute(($context["exchange_rates"] ?? null), "settings", []), "schedule", []) == "manual")) {
            echo "checked=\"checked\"";
        }
        echo " />
                    <label for=\"update-frequency-manual\">";
        // line 120
        echo \WPML\Core\twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["exchange_rates"] ?? null), "strings", []), "manually", []), "html", null, true);
        echo "</label>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>";
    }

    public function getTemplateName()
    {
        return "exchange-rates.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  379 => 120,  373 => 119,  366 => 114,  342 => 112,  338 => 111,  332 => 110,  327 => 108,  321 => 107,  314 => 102,  299 => 100,  295 => 99,  289 => 98,  284 => 96,  278 => 95,  270 => 90,  264 => 89,  256 => 84,  248 => 79,  244 => 78,  240 => 77,  236 => 76,  230 => 72,  220 => 67,  212 => 65,  210 => 64,  202 => 63,  197 => 61,  191 => 60,  188 => 59,  182 => 56,  178 => 55,  174 => 54,  169 => 53,  167 => 52,  160 => 50,  152 => 47,  147 => 45,  143 => 44,  137 => 43,  131 => 42,  128 => 41,  124 => 40,  118 => 37,  110 => 32,  103 => 28,  98 => 26,  94 => 25,  87 => 21,  79 => 18,  72 => 14,  66 => 13,  58 => 10,  53 => 8,  47 => 7,  41 => 4,  32 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"wcml-section\" id=\"online-exchange-rates\" {% if multi_currency_on is empty %}style=\"display:none\"{% endif %}>

    <div class=\"wcml-section-header\">
        <h3>{{ exchange_rates.strings.header }}</h3>
    </div>

    <div class=\"wcml-section-content\" id=\"online-exchange-rates-no-currencies\" {% if exchange_rates.secondary_currencies %} style=\"display:none\"{% endif %}>
        <p><i>{{ exchange_rates.strings.no_currencies }}</i></p>
    </div>
    <div class=\"wcml-section-content\" {% if exchange_rates.secondary_currencies is empty %} style=\"display:none\"{% endif %}>
        <p>
            <input type=\"checkbox\" id=\"exchange-rates-automatic\" name=\"exchange-rates-automatic\" value=\"1\"
                   {% if exchange_rates.settings.automatic == 1 %}checked=\"checked\"{% endif %} />
            <label for=\"exchange-rates-automatic\">{{ exchange_rates.strings.enable_automatic }}</label>
        </p>

        <div id=\"exchange-rates-online-wrap\"
             class=\"exchange-rates-online-wrap\"{% if exchange_rates.settings.automatic == 0 %} style=\"display: none;\"{% endif %} >

        <div class=\"wcml-section-content-inner\">
            <p id=\"update-rates-time\">{{ exchange_rates.strings.updated_time|raw }}</p>

            <p>
                <input type=\"button\" id=\"update-rates-manually\" class=\"button-secondary\"
                       value=\"{{ exchange_rates.strings.update }}\" />
                <i class=\"otgs-ico-help wcml-tip\" data-tip=\"{{ exchange_rates.strings.update_tip }}\" style=\"display: none\"></i>
                <span id=\"update-rates-spinner\" class=\"spinner\" style=\"float:none;\"></span>
                <input type=\"hidden\" id=\"update-exchange-rates-nonce\" value=\"{{ exchange_rates.strings.nonce }}\"/>
            </p>

            <p class=\"notice inline notice-success\" id=\"exchange-rates-success\"
               style=\"display:none\">{{ exchange_rates.strings.updated_success }}</p>
            <p class=\"notice inline notice-error\" id=\"exchange-rates-error\" style=\"display:none\"></p>
        </div>

        <div class=\"wcml-section-content-inner\">
            <h4>{{ exchange_rates.strings.services_label }}</h4>
            <ul class=\"exchange-rates-sources\">

                {% for id, service in exchange_rates.services %}
                    <li>
                        <input type=\"radio\" id=\"service-{{ id }}\" name=\"exchange-rates-service\" value=\"{{ id }}\"
                               {% if exchange_rates.settings.service == id %}checked=\"checked\"{% endif %} />
                        <label for=\"service-{{ id }}\">
                            {{ service.name }}
                        </label>
                        <a href=\"{{ service.url }}\" title=\"{{ exchange_rates.strings.visit_website }}\" class=\"exchange-rate-service-website no-ico\" target=\"_blank\">
                            <span class=\"dashicons dashicons-external\"></span>
                        </a>
                        <div class=\"service-details-wrap\" {% if exchange_rates.settings.service != id %} style=\"display: none;\"{% endif %} >

                            {% if service.requires_key %}
                                {{ exchange_rates.strings.key_required }}
                                <input type=\"text\" name=\"services[{{ id }}][api-key]\"
                                       value=\"{{ service.api_key }}\"
                                       placeholder=\"{{ exchange_rates.strings.key_placeholder }}\"
                                       size=\"40\" />
                            {% endif %}

                            <p class=\"notice inline notice-error\" {% if 'fixerio' != id %}style=\"display:none\"{% endif %}>
                                {{ exchange_rates.strings.fixerio_warning }}
                            </p>
                            <p class=\"notice inline notice-error\" id=\"service-error-{{ id }}\" {% if service.last_error == false %}style=\"display:none\"{% endif %}>
                            {% if service.last_error %}
                                {{service.last_error.text}} <i>({{service.last_error.time}})</i>
                            {% endif %}
                            </p>

                        </div>
                    </li>
                {% endfor %}
            </ul>
        </div>

        <div class=\"wcml-section-content-inner\">
            <h4>{{ exchange_rates.strings.lifting_label }}</h4>
            <p>{{ exchange_rates.strings.lifting_details1 }}</p>
            <input type=\"number\" name=\"lifting_charge\" value=\"{{ settings.lifting_charge }}\" step=\"any\" style=\"width:64px\" /> %
            <p><i>{{ exchange_rates.strings.lifting_details2|format( exchange_rates.services[exchange_rates.settings.service].name ) }}</i></p>
        </div>

        <div class=\"wcml-section-content-inner\">

            <h4>{{ exchange_rates.strings.frequency }}</h4>

            <ul>
                <li>
                    <input type=\"radio\" id=\"update-frequency-daily\" name=\"update-schedule\" value=\"daily\"
                           {% if exchange_rates.settings.schedule == 'daily' %}checked=\"checked\"{% endif %}/>
                    <label for=\"update-frequency-daily\">{{ exchange_rates.strings.daily }}</label>
                </li>

                <li>
                    <input type=\"radio\" id=\"update-frequency-weekly\" name=\"update-schedule\" value=\"weekly\"
                           {% if exchange_rates.settings.schedule == 'weekly' %}checked=\"checked\"{% endif %} />
                    <label for=\"update-frequency-weekly\">{{ exchange_rates.strings.weekly }}</label>
                    <select name=\"update-weekly-day\"
                            {% if exchange_rates.settings.schedule != 'weekly' %}disabled{% endif %}>
                        {% for i in 0..6 %}
                            <option value=\"{{ i }}\"{% if exchange_rates.settings.week_day == i %} selected=\"selected\"{% endif %}>{{ get_weekday(i) }}</option>
                        {% endfor %}
                    </select>
                </li>

                <li>
                    <input type=\"radio\" id=\"update-frequency-monthly\" name=\"update-schedule\" value=\"monthly\"
                           {% if exchange_rates.settings.schedule == 'monthly' %}checked=\"checked\"{% endif %} />
                    <label for=\"update-frequency-monthly\">{{ exchange_rates.strings.monthly }}</label>
                    <select name=\"update-monthly-day\"
                            {% if exchange_rates.settings.schedule != 'monthly' %}disabled{% endif %}>
                        {% for i in 1..31 %}
                            <option value=\"{{ i }}\"{% if exchange_rates.settings.month_day == i %} selected=\"selected\"{% endif %}>{{ i }}{% if i == 1 %}st{% elseif i == 2 %}nd{% elseif i == 2 %}rd{% else %}th{% endif %}</option>
                        {% endfor %}
                    </select>
                </li>

                <li>
                    <input type=\"radio\" id=\"update-frequency-manual\" name=\"update-schedule\" value=\"manual\"
                           {% if exchange_rates.settings.schedule == 'manual' %}checked=\"checked\"{% endif %} />
                    <label for=\"update-frequency-manual\">{{ exchange_rates.strings.manually }}</label>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>", "exchange-rates.twig", "/Applications/MAMP/htdocs/macparts/wp-content/plugins/woocommerce-multilingual/templates/multi-currency/exchange-rates.twig");
    }
}
