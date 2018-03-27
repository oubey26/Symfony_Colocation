<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_1be2c869dfe2e5d981bbe6b5abc50a37f71bfa6849822641847cf23a3f77bc3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cd08083e98f9c1bc8aaf20745ebff21b2f2b61c188e1d81fab61df4ee3196e92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd08083e98f9c1bc8aaf20745ebff21b2f2b61c188e1d81fab61df4ee3196e92->enter($__internal_cd08083e98f9c1bc8aaf20745ebff21b2f2b61c188e1d81fab61df4ee3196e92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_725f81bfea86763b51d0796f2eb76deb4ce106f8a73a158bc0a058568cf547e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_725f81bfea86763b51d0796f2eb76deb4ce106f8a73a158bc0a058568cf547e0->enter($__internal_725f81bfea86763b51d0796f2eb76deb4ce106f8a73a158bc0a058568cf547e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd08083e98f9c1bc8aaf20745ebff21b2f2b61c188e1d81fab61df4ee3196e92->leave($__internal_cd08083e98f9c1bc8aaf20745ebff21b2f2b61c188e1d81fab61df4ee3196e92_prof);

        
        $__internal_725f81bfea86763b51d0796f2eb76deb4ce106f8a73a158bc0a058568cf547e0->leave($__internal_725f81bfea86763b51d0796f2eb76deb4ce106f8a73a158bc0a058568cf547e0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_07e3bfb9c2baa63ad9af6d817ea2c10034fc632d8956269bed26541171b112b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07e3bfb9c2baa63ad9af6d817ea2c10034fc632d8956269bed26541171b112b6->enter($__internal_07e3bfb9c2baa63ad9af6d817ea2c10034fc632d8956269bed26541171b112b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_88df949c22e47e852251e686122c399a96f6df6db03406b4e272b4c8afbff350 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88df949c22e47e852251e686122c399a96f6df6db03406b4e272b4c8afbff350->enter($__internal_88df949c22e47e852251e686122c399a96f6df6db03406b4e272b4c8afbff350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_88df949c22e47e852251e686122c399a96f6df6db03406b4e272b4c8afbff350->leave($__internal_88df949c22e47e852251e686122c399a96f6df6db03406b4e272b4c8afbff350_prof);

        
        $__internal_07e3bfb9c2baa63ad9af6d817ea2c10034fc632d8956269bed26541171b112b6->leave($__internal_07e3bfb9c2baa63ad9af6d817ea2c10034fc632d8956269bed26541171b112b6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_1da3c1c80295f0fa7182e9dbff1115a91d7311f0f12023aebb1b24335064e06a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1da3c1c80295f0fa7182e9dbff1115a91d7311f0f12023aebb1b24335064e06a->enter($__internal_1da3c1c80295f0fa7182e9dbff1115a91d7311f0f12023aebb1b24335064e06a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c7867dcb79af76be9dba25cf5efba5a1c8f437de629aa66ec23eae377ecc99f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7867dcb79af76be9dba25cf5efba5a1c8f437de629aa66ec23eae377ecc99f9->enter($__internal_c7867dcb79af76be9dba25cf5efba5a1c8f437de629aa66ec23eae377ecc99f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_c7867dcb79af76be9dba25cf5efba5a1c8f437de629aa66ec23eae377ecc99f9->leave($__internal_c7867dcb79af76be9dba25cf5efba5a1c8f437de629aa66ec23eae377ecc99f9_prof);

        
        $__internal_1da3c1c80295f0fa7182e9dbff1115a91d7311f0f12023aebb1b24335064e06a->leave($__internal_1da3c1c80295f0fa7182e9dbff1115a91d7311f0f12023aebb1b24335064e06a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
