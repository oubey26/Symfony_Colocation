<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_3f7ae70731c556287ecfe6bbf737226432751b544e5d9edee01704aedd8fbb0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_d526eb4d8e87444fdd005bde82925334f429ab10f284c92b2d42a886acf1194a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d526eb4d8e87444fdd005bde82925334f429ab10f284c92b2d42a886acf1194a->enter($__internal_d526eb4d8e87444fdd005bde82925334f429ab10f284c92b2d42a886acf1194a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_75102482cb415b5921d58e43cc572153aff9f7e137240528cfd070b5aa33d062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75102482cb415b5921d58e43cc572153aff9f7e137240528cfd070b5aa33d062->enter($__internal_75102482cb415b5921d58e43cc572153aff9f7e137240528cfd070b5aa33d062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d526eb4d8e87444fdd005bde82925334f429ab10f284c92b2d42a886acf1194a->leave($__internal_d526eb4d8e87444fdd005bde82925334f429ab10f284c92b2d42a886acf1194a_prof);

        
        $__internal_75102482cb415b5921d58e43cc572153aff9f7e137240528cfd070b5aa33d062->leave($__internal_75102482cb415b5921d58e43cc572153aff9f7e137240528cfd070b5aa33d062_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b80fe46e6eaf73fb3922fa9807b4e64f3eb9dfb411f67a76cbb3018643206ca8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b80fe46e6eaf73fb3922fa9807b4e64f3eb9dfb411f67a76cbb3018643206ca8->enter($__internal_b80fe46e6eaf73fb3922fa9807b4e64f3eb9dfb411f67a76cbb3018643206ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a56d84755a37e4a7f2be42482baa83a4309b97a6e1ffbdc35c15a264adc72919 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a56d84755a37e4a7f2be42482baa83a4309b97a6e1ffbdc35c15a264adc72919->enter($__internal_a56d84755a37e4a7f2be42482baa83a4309b97a6e1ffbdc35c15a264adc72919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a56d84755a37e4a7f2be42482baa83a4309b97a6e1ffbdc35c15a264adc72919->leave($__internal_a56d84755a37e4a7f2be42482baa83a4309b97a6e1ffbdc35c15a264adc72919_prof);

        
        $__internal_b80fe46e6eaf73fb3922fa9807b4e64f3eb9dfb411f67a76cbb3018643206ca8->leave($__internal_b80fe46e6eaf73fb3922fa9807b4e64f3eb9dfb411f67a76cbb3018643206ca8_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b666838daec58064c0bd250cafa5722d0404cb888b346e3d687a351a53671346 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b666838daec58064c0bd250cafa5722d0404cb888b346e3d687a351a53671346->enter($__internal_b666838daec58064c0bd250cafa5722d0404cb888b346e3d687a351a53671346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e1036bcfbe4b6ddd5dabab35d134c3b87cac3c88bdfda722e43fc798e72d31d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1036bcfbe4b6ddd5dabab35d134c3b87cac3c88bdfda722e43fc798e72d31d7->enter($__internal_e1036bcfbe4b6ddd5dabab35d134c3b87cac3c88bdfda722e43fc798e72d31d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e1036bcfbe4b6ddd5dabab35d134c3b87cac3c88bdfda722e43fc798e72d31d7->leave($__internal_e1036bcfbe4b6ddd5dabab35d134c3b87cac3c88bdfda722e43fc798e72d31d7_prof);

        
        $__internal_b666838daec58064c0bd250cafa5722d0404cb888b346e3d687a351a53671346->leave($__internal_b666838daec58064c0bd250cafa5722d0404cb888b346e3d687a351a53671346_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
