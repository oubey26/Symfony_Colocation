<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_f0fe9d0dcad1b83e1b7977aeb4004060a578ea9af53b3f1c1c411a3f6d2fe80e extends Twig_Template
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
        $__internal_a36106895f41149523ff5c3931b74912fe2aba7c3cc1a12499ca38777a47b7fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a36106895f41149523ff5c3931b74912fe2aba7c3cc1a12499ca38777a47b7fc->enter($__internal_a36106895f41149523ff5c3931b74912fe2aba7c3cc1a12499ca38777a47b7fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_9e3fefa25f5fe3c516c222e98512eb916aa7f0f7b99d60e417c6fb3ae0a333e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e3fefa25f5fe3c516c222e98512eb916aa7f0f7b99d60e417c6fb3ae0a333e9->enter($__internal_9e3fefa25f5fe3c516c222e98512eb916aa7f0f7b99d60e417c6fb3ae0a333e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_a36106895f41149523ff5c3931b74912fe2aba7c3cc1a12499ca38777a47b7fc->leave($__internal_a36106895f41149523ff5c3931b74912fe2aba7c3cc1a12499ca38777a47b7fc_prof);

        
        $__internal_9e3fefa25f5fe3c516c222e98512eb916aa7f0f7b99d60e417c6fb3ae0a333e9->leave($__internal_9e3fefa25f5fe3c516c222e98512eb916aa7f0f7b99d60e417c6fb3ae0a333e9_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ebad1cfbc57e300f3e8687d5710d786009fbe6280581895cb28fe970b7d42ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ebad1cfbc57e300f3e8687d5710d786009fbe6280581895cb28fe970b7d42ac->enter($__internal_1ebad1cfbc57e300f3e8687d5710d786009fbe6280581895cb28fe970b7d42ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5ef8481b172ae55fed262d0d768b06cb78536db1abe0043e9933164586b180a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ef8481b172ae55fed262d0d768b06cb78536db1abe0043e9933164586b180a3->enter($__internal_5ef8481b172ae55fed262d0d768b06cb78536db1abe0043e9933164586b180a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_5ef8481b172ae55fed262d0d768b06cb78536db1abe0043e9933164586b180a3->leave($__internal_5ef8481b172ae55fed262d0d768b06cb78536db1abe0043e9933164586b180a3_prof);

        
        $__internal_1ebad1cfbc57e300f3e8687d5710d786009fbe6280581895cb28fe970b7d42ac->leave($__internal_1ebad1cfbc57e300f3e8687d5710d786009fbe6280581895cb28fe970b7d42ac_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_1b98ba96a47c1a437b628427e85a0e2b66a753e9a5cb4375d97bffa797f5ef44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b98ba96a47c1a437b628427e85a0e2b66a753e9a5cb4375d97bffa797f5ef44->enter($__internal_1b98ba96a47c1a437b628427e85a0e2b66a753e9a5cb4375d97bffa797f5ef44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_af2a3e739762bdae9543469f89cbf1276cd8806377f50a2975d61af63738668d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af2a3e739762bdae9543469f89cbf1276cd8806377f50a2975d61af63738668d->enter($__internal_af2a3e739762bdae9543469f89cbf1276cd8806377f50a2975d61af63738668d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_af2a3e739762bdae9543469f89cbf1276cd8806377f50a2975d61af63738668d->leave($__internal_af2a3e739762bdae9543469f89cbf1276cd8806377f50a2975d61af63738668d_prof);

        
        $__internal_1b98ba96a47c1a437b628427e85a0e2b66a753e9a5cb4375d97bffa797f5ef44->leave($__internal_1b98ba96a47c1a437b628427e85a0e2b66a753e9a5cb4375d97bffa797f5ef44_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_0631a70abc2c6bbd02ed4cc7d6bc6336cda06aaf67131b4a06b03a2cd758a9f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0631a70abc2c6bbd02ed4cc7d6bc6336cda06aaf67131b4a06b03a2cd758a9f7->enter($__internal_0631a70abc2c6bbd02ed4cc7d6bc6336cda06aaf67131b4a06b03a2cd758a9f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3d1c05c432f7439a2db575d3d7fedc0276fb36738e2217d2c2883a59f0513ee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d1c05c432f7439a2db575d3d7fedc0276fb36738e2217d2c2883a59f0513ee7->enter($__internal_3d1c05c432f7439a2db575d3d7fedc0276fb36738e2217d2c2883a59f0513ee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3d1c05c432f7439a2db575d3d7fedc0276fb36738e2217d2c2883a59f0513ee7->leave($__internal_3d1c05c432f7439a2db575d3d7fedc0276fb36738e2217d2c2883a59f0513ee7_prof);

        
        $__internal_0631a70abc2c6bbd02ed4cc7d6bc6336cda06aaf67131b4a06b03a2cd758a9f7->leave($__internal_0631a70abc2c6bbd02ed4cc7d6bc6336cda06aaf67131b4a06b03a2cd758a9f7_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
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
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
