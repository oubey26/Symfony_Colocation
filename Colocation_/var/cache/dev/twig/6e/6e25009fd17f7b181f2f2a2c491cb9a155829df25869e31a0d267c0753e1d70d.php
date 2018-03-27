<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_7c6f8f97d974d7527ea8c4a4f957748a971d84dd146546fde691bde86828aa09 extends Twig_Template
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
        $__internal_369e958c082f52a3f5918d1ec96283b91b24dbbd4120db63406894406a40b669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_369e958c082f52a3f5918d1ec96283b91b24dbbd4120db63406894406a40b669->enter($__internal_369e958c082f52a3f5918d1ec96283b91b24dbbd4120db63406894406a40b669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_6def1ec6bb54cdd81011056b6964e42a8926e15dbc2db8bcd548a80f4cde3910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6def1ec6bb54cdd81011056b6964e42a8926e15dbc2db8bcd548a80f4cde3910->enter($__internal_6def1ec6bb54cdd81011056b6964e42a8926e15dbc2db8bcd548a80f4cde3910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_369e958c082f52a3f5918d1ec96283b91b24dbbd4120db63406894406a40b669->leave($__internal_369e958c082f52a3f5918d1ec96283b91b24dbbd4120db63406894406a40b669_prof);

        
        $__internal_6def1ec6bb54cdd81011056b6964e42a8926e15dbc2db8bcd548a80f4cde3910->leave($__internal_6def1ec6bb54cdd81011056b6964e42a8926e15dbc2db8bcd548a80f4cde3910_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_b0b2194e652ec74cb8db7b53307ecceb1925a249b6894243e6faca2664f283b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b0b2194e652ec74cb8db7b53307ecceb1925a249b6894243e6faca2664f283b1->enter($__internal_b0b2194e652ec74cb8db7b53307ecceb1925a249b6894243e6faca2664f283b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_c20c04be5cdcf3f2cf23b12896cb93adf83a5660d8bc6fed481e2ec4412e7021 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c20c04be5cdcf3f2cf23b12896cb93adf83a5660d8bc6fed481e2ec4412e7021->enter($__internal_c20c04be5cdcf3f2cf23b12896cb93adf83a5660d8bc6fed481e2ec4412e7021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_c20c04be5cdcf3f2cf23b12896cb93adf83a5660d8bc6fed481e2ec4412e7021->leave($__internal_c20c04be5cdcf3f2cf23b12896cb93adf83a5660d8bc6fed481e2ec4412e7021_prof);

        
        $__internal_b0b2194e652ec74cb8db7b53307ecceb1925a249b6894243e6faca2664f283b1->leave($__internal_b0b2194e652ec74cb8db7b53307ecceb1925a249b6894243e6faca2664f283b1_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_fd89de51798b5663861fd86ed85135c221f9a36a80dc48465e6a97d7cea3d284 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd89de51798b5663861fd86ed85135c221f9a36a80dc48465e6a97d7cea3d284->enter($__internal_fd89de51798b5663861fd86ed85135c221f9a36a80dc48465e6a97d7cea3d284_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a05a99460a00faf2da85b8ddd962890b64d3c5f002db021baf74390e625ce54a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a05a99460a00faf2da85b8ddd962890b64d3c5f002db021baf74390e625ce54a->enter($__internal_a05a99460a00faf2da85b8ddd962890b64d3c5f002db021baf74390e625ce54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_a05a99460a00faf2da85b8ddd962890b64d3c5f002db021baf74390e625ce54a->leave($__internal_a05a99460a00faf2da85b8ddd962890b64d3c5f002db021baf74390e625ce54a_prof);

        
        $__internal_fd89de51798b5663861fd86ed85135c221f9a36a80dc48465e6a97d7cea3d284->leave($__internal_fd89de51798b5663861fd86ed85135c221f9a36a80dc48465e6a97d7cea3d284_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4d5d81e695d1b0ea338b4510b7d9a251ee17249b775366fe6123c10bc676a4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4d5d81e695d1b0ea338b4510b7d9a251ee17249b775366fe6123c10bc676a4b->enter($__internal_b4d5d81e695d1b0ea338b4510b7d9a251ee17249b775366fe6123c10bc676a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e2e5abea6e09e864ba4d72edc7b80d99f7397de725861a41d7ccee01d9de4b12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2e5abea6e09e864ba4d72edc7b80d99f7397de725861a41d7ccee01d9de4b12->enter($__internal_e2e5abea6e09e864ba4d72edc7b80d99f7397de725861a41d7ccee01d9de4b12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e2e5abea6e09e864ba4d72edc7b80d99f7397de725861a41d7ccee01d9de4b12->leave($__internal_e2e5abea6e09e864ba4d72edc7b80d99f7397de725861a41d7ccee01d9de4b12_prof);

        
        $__internal_b4d5d81e695d1b0ea338b4510b7d9a251ee17249b775366fe6123c10bc676a4b->leave($__internal_b4d5d81e695d1b0ea338b4510b7d9a251ee17249b775366fe6123c10bc676a4b_prof);

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
