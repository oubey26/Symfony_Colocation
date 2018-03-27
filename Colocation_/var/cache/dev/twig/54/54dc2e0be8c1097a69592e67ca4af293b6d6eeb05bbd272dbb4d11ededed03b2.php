<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_1aa7188b6152712e4e95e7cb03cc900f997037f7d316207446e5e7e64d857d6d extends Twig_Template
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
        $__internal_c0898ea9ce63d54be47b5c3205c4b11f5dfa9ee7fda06cb8db475b51c83f2f6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0898ea9ce63d54be47b5c3205c4b11f5dfa9ee7fda06cb8db475b51c83f2f6c->enter($__internal_c0898ea9ce63d54be47b5c3205c4b11f5dfa9ee7fda06cb8db475b51c83f2f6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_337d346d182d0404e2566a1d418c02cddefe84b4446e9846aceb0745906399ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_337d346d182d0404e2566a1d418c02cddefe84b4446e9846aceb0745906399ce->enter($__internal_337d346d182d0404e2566a1d418c02cddefe84b4446e9846aceb0745906399ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_c0898ea9ce63d54be47b5c3205c4b11f5dfa9ee7fda06cb8db475b51c83f2f6c->leave($__internal_c0898ea9ce63d54be47b5c3205c4b11f5dfa9ee7fda06cb8db475b51c83f2f6c_prof);

        
        $__internal_337d346d182d0404e2566a1d418c02cddefe84b4446e9846aceb0745906399ce->leave($__internal_337d346d182d0404e2566a1d418c02cddefe84b4446e9846aceb0745906399ce_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_962dddf038bfcd018860c612f6f1070342307ac9889c4c3b53ad3fcb7fd79138 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_962dddf038bfcd018860c612f6f1070342307ac9889c4c3b53ad3fcb7fd79138->enter($__internal_962dddf038bfcd018860c612f6f1070342307ac9889c4c3b53ad3fcb7fd79138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_52cc1d88addc7defb5ea5048e9c1fe7a307943f750ca65fa9cc3e06568afc1a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52cc1d88addc7defb5ea5048e9c1fe7a307943f750ca65fa9cc3e06568afc1a0->enter($__internal_52cc1d88addc7defb5ea5048e9c1fe7a307943f750ca65fa9cc3e06568afc1a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_52cc1d88addc7defb5ea5048e9c1fe7a307943f750ca65fa9cc3e06568afc1a0->leave($__internal_52cc1d88addc7defb5ea5048e9c1fe7a307943f750ca65fa9cc3e06568afc1a0_prof);

        
        $__internal_962dddf038bfcd018860c612f6f1070342307ac9889c4c3b53ad3fcb7fd79138->leave($__internal_962dddf038bfcd018860c612f6f1070342307ac9889c4c3b53ad3fcb7fd79138_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_89988ee636d32813d8d3253f89b49c24592919675c1e811e31bcab7d0b5e75fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89988ee636d32813d8d3253f89b49c24592919675c1e811e31bcab7d0b5e75fb->enter($__internal_89988ee636d32813d8d3253f89b49c24592919675c1e811e31bcab7d0b5e75fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c1acbcb76f218904d93b334555a70a77646315db4b599d90fcbf2fabc71ef5cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1acbcb76f218904d93b334555a70a77646315db4b599d90fcbf2fabc71ef5cd->enter($__internal_c1acbcb76f218904d93b334555a70a77646315db4b599d90fcbf2fabc71ef5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_c1acbcb76f218904d93b334555a70a77646315db4b599d90fcbf2fabc71ef5cd->leave($__internal_c1acbcb76f218904d93b334555a70a77646315db4b599d90fcbf2fabc71ef5cd_prof);

        
        $__internal_89988ee636d32813d8d3253f89b49c24592919675c1e811e31bcab7d0b5e75fb->leave($__internal_89988ee636d32813d8d3253f89b49c24592919675c1e811e31bcab7d0b5e75fb_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc6e22712b4d1ea73e9f9a573321cb947cc8405feb33ee82779e4b5227e77909 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc6e22712b4d1ea73e9f9a573321cb947cc8405feb33ee82779e4b5227e77909->enter($__internal_bc6e22712b4d1ea73e9f9a573321cb947cc8405feb33ee82779e4b5227e77909_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7b39f7178dc672bd1fe5f775cab353385ca51b25ccdb457a0f93b09460f81e0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b39f7178dc672bd1fe5f775cab353385ca51b25ccdb457a0f93b09460f81e0b->enter($__internal_7b39f7178dc672bd1fe5f775cab353385ca51b25ccdb457a0f93b09460f81e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_7b39f7178dc672bd1fe5f775cab353385ca51b25ccdb457a0f93b09460f81e0b->leave($__internal_7b39f7178dc672bd1fe5f775cab353385ca51b25ccdb457a0f93b09460f81e0b_prof);

        
        $__internal_bc6e22712b4d1ea73e9f9a573321cb947cc8405feb33ee82779e4b5227e77909->leave($__internal_bc6e22712b4d1ea73e9f9a573321cb947cc8405feb33ee82779e4b5227e77909_prof);

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
