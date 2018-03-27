<?php

/* TwigBundle::layout.html.twig */
class __TwigTemplate_c581301711d87f5730f4cbd05f53da8bf27c508f63f48adf1469405663d991dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1bea8574b0c452c76eed9d19f1a3f34c44fbafe511d77e97e1e5067b0acdff07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1bea8574b0c452c76eed9d19f1a3f34c44fbafe511d77e97e1e5067b0acdff07->enter($__internal_1bea8574b0c452c76eed9d19f1a3f34c44fbafe511d77e97e1e5067b0acdff07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        $__internal_787d95dc31f1c29e113f1484d077b66c9ee0fdf66f2855f5b72cdc627052e1a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_787d95dc31f1c29e113f1484d077b66c9ee0fdf66f2855f5b72cdc627052e1a5->enter($__internal_787d95dc31f1c29e113f1484d077b66c9ee0fdf66f2855f5b72cdc627052e1a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle::layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_1bea8574b0c452c76eed9d19f1a3f34c44fbafe511d77e97e1e5067b0acdff07->leave($__internal_1bea8574b0c452c76eed9d19f1a3f34c44fbafe511d77e97e1e5067b0acdff07_prof);

        
        $__internal_787d95dc31f1c29e113f1484d077b66c9ee0fdf66f2855f5b72cdc627052e1a5->leave($__internal_787d95dc31f1c29e113f1484d077b66c9ee0fdf66f2855f5b72cdc627052e1a5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0151351ae545239f6ce504f6171233782d362cab9743823277088930bce5ce79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0151351ae545239f6ce504f6171233782d362cab9743823277088930bce5ce79->enter($__internal_0151351ae545239f6ce504f6171233782d362cab9743823277088930bce5ce79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8af05b39cdea7cc6025ef126e032aeef90c09229cab147e997dd532857dbeee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8af05b39cdea7cc6025ef126e032aeef90c09229cab147e997dd532857dbeee7->enter($__internal_8af05b39cdea7cc6025ef126e032aeef90c09229cab147e997dd532857dbeee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_8af05b39cdea7cc6025ef126e032aeef90c09229cab147e997dd532857dbeee7->leave($__internal_8af05b39cdea7cc6025ef126e032aeef90c09229cab147e997dd532857dbeee7_prof);

        
        $__internal_0151351ae545239f6ce504f6171233782d362cab9743823277088930bce5ce79->leave($__internal_0151351ae545239f6ce504f6171233782d362cab9743823277088930bce5ce79_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_ac687a2866d9a4011e292f603bdd8b2c2dd956a901a9fa15b148a862dc9ea6dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac687a2866d9a4011e292f603bdd8b2c2dd956a901a9fa15b148a862dc9ea6dc->enter($__internal_ac687a2866d9a4011e292f603bdd8b2c2dd956a901a9fa15b148a862dc9ea6dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_542183f1fcaf0fed7f550bf9164b08fc49ed0caf2365b268df95b3abd9f8e2f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_542183f1fcaf0fed7f550bf9164b08fc49ed0caf2365b268df95b3abd9f8e2f9->enter($__internal_542183f1fcaf0fed7f550bf9164b08fc49ed0caf2365b268df95b3abd9f8e2f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_542183f1fcaf0fed7f550bf9164b08fc49ed0caf2365b268df95b3abd9f8e2f9->leave($__internal_542183f1fcaf0fed7f550bf9164b08fc49ed0caf2365b268df95b3abd9f8e2f9_prof);

        
        $__internal_ac687a2866d9a4011e292f603bdd8b2c2dd956a901a9fa15b148a862dc9ea6dc->leave($__internal_ac687a2866d9a4011e292f603bdd8b2c2dd956a901a9fa15b148a862dc9ea6dc_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_7a3932a02bf8f5b782f27bfec51095d10c2b0acb02e6ae16c853ade3cc0b588c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a3932a02bf8f5b782f27bfec51095d10c2b0acb02e6ae16c853ade3cc0b588c->enter($__internal_7a3932a02bf8f5b782f27bfec51095d10c2b0acb02e6ae16c853ade3cc0b588c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_31e4df4f5b3ca3d5e27b287b92cf6e6ed2fb86722f34d0ff62183e27ba90bbe8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31e4df4f5b3ca3d5e27b287b92cf6e6ed2fb86722f34d0ff62183e27ba90bbe8->enter($__internal_31e4df4f5b3ca3d5e27b287b92cf6e6ed2fb86722f34d0ff62183e27ba90bbe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_31e4df4f5b3ca3d5e27b287b92cf6e6ed2fb86722f34d0ff62183e27ba90bbe8->leave($__internal_31e4df4f5b3ca3d5e27b287b92cf6e6ed2fb86722f34d0ff62183e27ba90bbe8_prof);

        
        $__internal_7a3932a02bf8f5b782f27bfec51095d10c2b0acb02e6ae16c853ade3cc0b588c->leave($__internal_7a3932a02bf8f5b782f27bfec51095d10c2b0acb02e6ae16c853ade3cc0b588c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "TwigBundle::layout.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/layout.html.twig");
    }
}
