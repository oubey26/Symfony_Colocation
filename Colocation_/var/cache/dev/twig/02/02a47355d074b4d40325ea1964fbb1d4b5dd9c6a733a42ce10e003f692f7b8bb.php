<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_ea002a0d218dc1a90406b32eb8c1f7e2ca836ecf9044a16a911159f38de14b48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60c77b9ec1e0b101024ecb453261ec3db645972e291670e70a1d0601a3642aae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60c77b9ec1e0b101024ecb453261ec3db645972e291670e70a1d0601a3642aae->enter($__internal_60c77b9ec1e0b101024ecb453261ec3db645972e291670e70a1d0601a3642aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_cfe1f9ae43d4c47394bc7f210ea6bd1f0d68796c44e23f4c208e67912d02972e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfe1f9ae43d4c47394bc7f210ea6bd1f0d68796c44e23f4c208e67912d02972e->enter($__internal_cfe1f9ae43d4c47394bc7f210ea6bd1f0d68796c44e23f4c208e67912d02972e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60c77b9ec1e0b101024ecb453261ec3db645972e291670e70a1d0601a3642aae->leave($__internal_60c77b9ec1e0b101024ecb453261ec3db645972e291670e70a1d0601a3642aae_prof);

        
        $__internal_cfe1f9ae43d4c47394bc7f210ea6bd1f0d68796c44e23f4c208e67912d02972e->leave($__internal_cfe1f9ae43d4c47394bc7f210ea6bd1f0d68796c44e23f4c208e67912d02972e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_4a74da0e61bdd42dcdf475052be9357c06822f2b47a46a39525bcdde6280b2af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a74da0e61bdd42dcdf475052be9357c06822f2b47a46a39525bcdde6280b2af->enter($__internal_4a74da0e61bdd42dcdf475052be9357c06822f2b47a46a39525bcdde6280b2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_45f1198c05f546ba987a360ee9b445d46dd9dd8149da9626cc001750898599dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45f1198c05f546ba987a360ee9b445d46dd9dd8149da9626cc001750898599dc->enter($__internal_45f1198c05f546ba987a360ee9b445d46dd9dd8149da9626cc001750898599dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_45f1198c05f546ba987a360ee9b445d46dd9dd8149da9626cc001750898599dc->leave($__internal_45f1198c05f546ba987a360ee9b445d46dd9dd8149da9626cc001750898599dc_prof);

        
        $__internal_4a74da0e61bdd42dcdf475052be9357c06822f2b47a46a39525bcdde6280b2af->leave($__internal_4a74da0e61bdd42dcdf475052be9357c06822f2b47a46a39525bcdde6280b2af_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e1b74a5aac65104b4a0969400f1d7cd852e0888459ac52d2200809410930de0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1b74a5aac65104b4a0969400f1d7cd852e0888459ac52d2200809410930de0f->enter($__internal_e1b74a5aac65104b4a0969400f1d7cd852e0888459ac52d2200809410930de0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_05c5d738124800424e21cb93dc99f59d6c3a44e3e3b20a49c54cb2ef5b1a003b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05c5d738124800424e21cb93dc99f59d6c3a44e3e3b20a49c54cb2ef5b1a003b->enter($__internal_05c5d738124800424e21cb93dc99f59d6c3a44e3e3b20a49c54cb2ef5b1a003b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_05c5d738124800424e21cb93dc99f59d6c3a44e3e3b20a49c54cb2ef5b1a003b->leave($__internal_05c5d738124800424e21cb93dc99f59d6c3a44e3e3b20a49c54cb2ef5b1a003b_prof);

        
        $__internal_e1b74a5aac65104b4a0969400f1d7cd852e0888459ac52d2200809410930de0f->leave($__internal_e1b74a5aac65104b4a0969400f1d7cd852e0888459ac52d2200809410930de0f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_44e68004ae2c77bd11a885998edbfb6f1352126316fdd2053d77e61553b17faa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44e68004ae2c77bd11a885998edbfb6f1352126316fdd2053d77e61553b17faa->enter($__internal_44e68004ae2c77bd11a885998edbfb6f1352126316fdd2053d77e61553b17faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_28853493a76d647a2a992ff429672714995daac7458012cc5618174e14026bca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28853493a76d647a2a992ff429672714995daac7458012cc5618174e14026bca->enter($__internal_28853493a76d647a2a992ff429672714995daac7458012cc5618174e14026bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_28853493a76d647a2a992ff429672714995daac7458012cc5618174e14026bca->leave($__internal_28853493a76d647a2a992ff429672714995daac7458012cc5618174e14026bca_prof);

        
        $__internal_44e68004ae2c77bd11a885998edbfb6f1352126316fdd2053d77e61553b17faa->leave($__internal_44e68004ae2c77bd11a885998edbfb6f1352126316fdd2053d77e61553b17faa_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
